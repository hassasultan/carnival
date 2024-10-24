<?php

namespace App\Services;

use App\Models\Event;
use App\Models\EventTicket;
use App\Models\EventImage;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImageTrait;
use App\Traits\MultipleImageTrait;

class EventService
{
    use ImageTrait, MultipleImageTrait;

    public function createEvent(array $data)
    {

        $eventData = $this->prepareEventData($data);

        if (isset($data['banner'])) {
            $banner = $this->uploadImage($data['banner'], 'eventBanner');
            $eventData['banner'] = $banner;
        }

        $event = Event::create($eventData);

        if (isset($data['additional_images'])) {
            $this->handleAdditionalImages($event, $data['additional_images']);
        }

        if (isset($data['ticket_id'])) {
            $this->saveEventTickets($event, $data['ticket_id'], $data['price'], $data['quantity']);
        }

        return $event;
    }

    public function updateEvent(Event $event, array $data)
    {
        $eventData = $this->prepareEventData($data);

        if (isset($data['banner'])) {
            $banner = $this->uploadImage($data['banner'], 'eventBanner');
            $eventData['banner'] = $banner;
        }

        $event->update($eventData);

        if (isset($data['additional_images'])) {
            $this->handleAdditionalImages($event, $data['additional_images']);
        }

        if (isset($data['ticket_id'])) {
            $this->updateEventTickets($event, $data['ticket_id'], $data['price'], $data['quantity']);
        }

        return $event;
    }

    protected function prepareEventData(array $data)
    {
        $eventData = [
            'name' => $data['name'],
            'package_id' => $data['package_id'],
            'category_id' => $data['category_id'],
            'user_id' => $data['user_id'],
            'total_no_of_tickets' => $data['total_no_of_tickets'],
            'venue' => $data['venue'],
            'address' => $data['address'],
            'description' => $data['description'] ?? null,
            'eventType' => $data['eventType'],
            'start_date' => $data['start_date'] ?? null,
            'start_time' => $data['start_time'] ?? null,
            'end_date' => $data['end_date'] ?? null,
            'end_time' => $data['end_time'] ?? null,
            'all_day' => $data['all_day'] ?? null,
            'status' => $data['status'],

            'booking_start_time_btn' => $data['booking_start_time_btn'] ?? 0,
            'booking_starts_on_date' => $data['booking_starts_on_date'] ?? null,
            'booking_starts_on_time' => $data['booking_starts_on_time'] ?? null,

            'booking_end_time_btn' => $data['booking_end_time_btn'] ?? 0,
            'booking_ends_on_date' => $data['booking_ends_on_date'] ?? null,
            'booking_ends_on_time' => $data['booking_ends_on_time'] ?? null,

            'passing_service_charge_btn' => $data['passing_service_charge_btn'] ?? 0,

            'refund_policies_btn' => $data['refund_policies_btn'] ?? 0,
            'refund_policy_id' => $data['refund_policy_id'] ?? null,
            'cancel_before' => $data['cancel_before'] ?? null,
            'refund_amount' => $data['refund_amount'] ?? null,

            'ticket_instructions_btn' => $data['ticket_instructions_btn'] ?? 0,
            'special_instructions' => $data['special_instructions'] ?? null,

            'tags_btn' => $data['tags_btn'] ?? 0,
            // 'dress_code' => isset($data['dress_code']) ? implode(',', $data['dress_code']) : null,
        ];

        if (isset($data['dress_code'])) {
            $eventData['dress_code'] = implode(',', $data['dress_code']);
        }

        return $eventData;
    }

    protected function handleAdditionalImages(Event $event, $images)
    {
        $additionalImagePaths = $this->uploadMultipleImages($images, 'additional_images');
        foreach ($additionalImagePaths as $additionalImage) {
            EventImage::create([
                'event_id' => $event->id,
                'image_url' => $additionalImage['path'],
                'image_name' => $additionalImage['original_name'],
            ]);
        }
    }

    protected function saveEventTickets(Event $event, $ticketIds, $prices, $quantities)
    {
        foreach ($ticketIds as $key => $ticketId) {
            $eventTicketData = [
                'ticket_id' => $ticketId,
                'event_id' => $event->id,
                'price' => $prices[$key],
                'quantity' => $quantities[$key],
                'status' => 1,
            ];
            EventTicket::create($eventTicketData);
        }
    }

    protected function updateEventTickets(Event $event, $ticketIds, $prices, $quantities)
    {
        foreach ($ticketIds as $key => $ticketId) {
            $eventTicket = $event->tickets()->where('ticket_id', $ticketId)->first();
            if ($eventTicket) {
                $eventTicket->update([
                    'price' => $prices[$key],
                    'quantity' => $quantities[$key],
                ]);
            }
        }
    }
}
