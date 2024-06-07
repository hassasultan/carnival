<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $services = Service::all();
        return view('dashboard.admin.services.index', compact('services'));
    }

    public function store(Request $request)
    {
        $data = $request->except(['poster']);

        $poster = $this->uploadImage($request->file('poster'), 'poster');

        $data['poster'] = $poster;

        $data['user_id'] = Auth::id();

        $service = Service::create($data);

        if ($service) {
            $services = Service::all();
            $view = view('dashboard.admin.services.table', compact('services'))->render();

            return response()->json(['message' => 'Service created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Service'], 500);
        }
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return response()->json(['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->except(['poster']);
            
            $service = Service::findOrFail($id);

            $service->update($data);

            if ($request->hasFile('poster')) {
                $this->deleteImage($service->poster);
                $poster = $this->uploadImage($request->file('poster'), 'poster');
                $service->update(['poster' => $poster]);
            }

            if ($service->wasChanged()) {
                $services = Service::all();
                $view = view('dashboard.admin.services.table', compact('services'))->render();

                return response()->json(['message' => 'Service updated successfully', 'table_html' => $view], 200);
            } else {
                return response()->json(['error' => 'No changes detected for the Service'], 400);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Service not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update Service: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        if ($service) {
            $services = Service::all();
            $view = view('dashboard.admin.services.table', compact('services'))->render();

            return response()->json(['message' => 'Service deleted successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Service'], 500);
        }
    }
}
