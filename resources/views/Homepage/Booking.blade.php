@extends('Layouts.Layout')

@section('title', 'Book Now - Dental Clinic')

@section('content')

    <main>
        <section class="hero">
            <div class="hero-image">
                <div class="hero-text">
                    <h1 class="header">Book Now</h1>
                    <p><a href="/">Home </a> / Book Now</p>
                </div>
            </div>
        </section>

        <section class="book-section page-section">
            <div class="container">
                <div class="card border-0 p-4">
                    <form class="create-schedule">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div id='calendar'></div>
                            </div>
                            <div class="col-12 col-md-6">


                                <div class="d-flex align-items-center date-select">
                                    <div class="icon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        Date:
                                    </div>
                                    <div class="selected-date" name="date">No Date Selected</div>
                                </div>

                                <div class="d-flex align-items-center time-select">
                                    <div class="icon">
                                        <i class="fa-solid fa-calendar-check"></i>
                                        Slots Available:
                                    </div>

                                    <div class="slotss">0</div>
                                </div>

                                <hr>

                                <div class="time-selection">
                                    <div class="radio-inputs text-center">
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="8:00 AM"
                                                disabled>
                                            <span class="radio-tile">
                                                <span class="radio-label">08:00 AM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="9:00 AM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">09:00 AM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="10:00 AM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">10:00 AM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="11:00 AM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">11:00 AM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="01:00 PM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">01:00 PM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="02:00 PM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">02:00 PM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="03:00 PM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">03:00 PM</span>
                                            </span>
                                        </label>
                                        <label>
                                            <input class="radio-input" type="radio" name="time" value="04:00 PM"
                                                disabled>
                                            <span class="radio-tile">

                                                <span class="radio-label">04:00 PM</span>
                                            </span>
                                        </label>

                                    </div>
                                </div>


                                <div class="d-flex align-items-center">
                                    <div class="icon d-flex align-items-center">
                                        <i class="fa-solid fa-calendar-days fa-lg me-2"></i>
                                        <span class="review-timedate">Time and date
                                            <small class="d-block date-time">
                                                No date and time selected
                                            </small>
                                        </span>
                                    </div>

                                </div>

                                <hr>


                                <div class="form-group mb-3">
                                    <label class="mb-2" for="name">Enter Full name</label>
                                    <input class="input" type="text" name="name">
                                </div>

                                <div class="form-group mb-3">
                                    <label  class="mb-2" for="email">Email</label>
                                    <input class="input" type="email" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label  class="mb-2" for="phone">Number</label>
                                    <input class="input" type="text" name="phone">

                                </div>
                                <input type="hidden" name="status" value="Pending">
                                <button type="submit">
                                    Submit
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>


                        </div>
                    </form>
                </div>

            </div>
        </section>



    </main>


@endsection

@section('scripts')
    @parent

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var avaslots = document.querySelector('.slotss');
            var selectedDateEl = document.querySelector('.selected-date');
            var timeInputElements = document.getElementsByClassName('radio-input');

            var displaySmall = document.querySelector('.date-time');
            var selectedDate = '';
            var selectedTime = '';

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                dateClick: function(info) {
                    selectedDate = info.dateStr;

                    // Format the selected date
                    // const formattedDate = new Date(selectedDate).toLocaleDateString('en-US', {
                    //     weekday: 'long',
                    //     year: 'numeric',
                    //     month: 'long',
                    //     day: 'numeric'
                    // });

                    selectedDateEl.textContent = selectedDate;


                    // Enable the time radio buttons when a date is selected
                    for (var i = 0; i < timeInputElements.length; i++) {
                        timeInputElements[i].removeAttribute('disabled');
                    }

                    // Update the display in the <small> tag
                    updateDisplay();

                    // Fetch and display available slots
                    fetch(`/api/getSlots?date=${selectedDate}`)
                        .then(response => response.json())
                        .then(data => {
                            if (avaslots) {
                                const totalslot = 8;
                                const slotstaken = data.slots;
                                const slotavailable = totalslot - slotstaken;

                                if (slotavailable == 0) {
                                    avaslots.textContent = `No Available Slot`;
                                } else {
                                    avaslots.textContent = `${slotavailable}`;
                                }
                            }
                        })
                        .catch(error => console.error('Error fetching slots:', error));
                }
            });

            calendar.render();

            // Add event listeners to the time radio buttons
            for (var i = 0; i < timeInputElements.length; i++) {
                timeInputElements[i].addEventListener('change', function(event) {
                    selectedTime = event.target.value;
                    updateDisplay();
                });
            }

            // Function to update the display in the <small> tag
            function updateDisplay() {
                if (selectedDate && selectedTime) {

                    const formattedDates = new Date(selectedDate).toLocaleDateString('en-US', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });

                    displaySmall.textContent = `${selectedTime} ${formattedDates}`;

                }
            }
        });
    </script>

    <script src="/JS/Booking.js"></script>

@endsection
