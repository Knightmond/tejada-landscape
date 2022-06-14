<div class="container">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                validRange: {
                    "start": Date.now()
                },
                dateClick: function(info){
                    jQuery("#modalBtn").click();
                    jQuery("#formModalLabel").html("Date: "+info.dateStr);
                    @this.calendarDate = info.dateStr;
                },
            });
            calendar.render();
        });
    </script>
    <!-- Button trigger modal -->
    <button type="button" id="modalBtn" style="display:none;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" wire:ignore style="color: black;" id="formModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form wire:submit.prevent="pushAppointment" id="form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col form-group">
                            <label for="name">Name *</label>
                            <input class="form-control" id="name" wire:model="appointment.name" type="text" placeholder="Enter name">
                            @error('appointment.name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col form-group">
                            <label for="location">Location *</label>
                            <input class="form-control" id="location" wire:model="appointment.location" type="text" placeholder="Location">
                            @error('appointment.location') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col form-group">
                            <label for="time">Time *</label>
                            <select class="form-control" id="time" wire:model="appointment.startTime">
                                <option value="">Select</option>
                                <option value="08:00">08:00</option>
                                <option value="13:00">13:00</option>
                                <option value="18:00">18:00</option>
                            </select>
                            @error('appointment.startTime') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Details</label>
                        <textarea class="form-control" id="description" wire:model="appointment.description" placeholder="'I want you to make something like this: ...'" cols="30" rows="7"></textarea>
                    </div>
                    <h4 class="text-center">Contact</h4>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email *</label>
                            <input class="form-control" id="email" wire:model="appointment.email" type="email" placeholder="Enter email">
                            @error('appointment.email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" maxlength="10" wire:model="appointment.phone" type="text" placeholder="Enter phone number">
                            @error('appointment.phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btn" class="btn btn-primary">Make Appointment</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div wire:ignore id="calendar">
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
