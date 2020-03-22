@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <calendar-form></calendar-form>
        </div>
        <div class="col-md-8">
            <fullcalender
                defaultView="dayGridMonth"
                :plugins="calendarPlugins"
                :events="events">
            </fullcalender>
        </div>
    </div>
</div>
@endsection
