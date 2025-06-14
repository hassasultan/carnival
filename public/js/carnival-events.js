$(document).ready(function() {
    // Initialize Select2 for multiple event selection
    $('.select2').select2({
        placeholder: "Select events",
        allowClear: true,
        width: '100%'
    });

    // Handle Add Events button click
    $('.addEventsBtn').on('click', function() {
        const carnivalId = $(this).data('id');
        $('#carnival_id').val(carnivalId);
        
        // Fetch current events for this carnival
        $.ajax({
            url: `/carnivals/${carnivalId}/events`,
            method: 'GET',
            success: function(response) {
                // Pre-select current events
                $('#events').val(response.events).trigger('change');
            },
            error: function(xhr) {
                console.error('Error fetching events:', xhr);
            }
        });
    });

    // Handle Save Events button click
    $('#saveEventsBtn').on('click', function() {
        const carnivalId = $('#carnival_id').val();
        const selectedEvents = $('#events').val();

        $.ajax({
            url: `/carnivals/${carnivalId}/events`,
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                events: selectedEvents
            },
            success: function(response) {
                // Show success message
                toastr.success('Events updated successfully');
                // Close modal
                $('#addEventsModal').modal('hide');
            },
            error: function(xhr) {
                console.error('Error saving events:', xhr);
                toastr.error('Error updating events');
            }
        });
    });
}); 