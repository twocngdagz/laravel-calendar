@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <fullcalender
                defaultView="dayGridMonth"
                :plugins="calendarPlugins"
                :events="[
                    { title: 'event 1', date: '2020-03-01' },
                    { title: 'event 2', date: '2020-03-02' }
                ]">
            </fullcalender>
        </div>
    </div>
</div>
@endsection
