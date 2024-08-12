@extends('Layouts.Layout')

@section('title', 'Book Now - Dental Clinic')

@section('content')

    <main>
        <section class="hero-section">

        </section>

        <section class="book-section">
            <div class="container">
                {{-- <div class="sectionTitle">
                    <h4 class="top-title">Our Staff</h4>
                    <h1 class="section-title">
                        Meet our specialists
                    </h1>
                </div> --}}
                <div class="card p-4">
                    <form class="create-schedule">

                    <div class="row">
                       
                        <div class="col-12 col-md-6">
                            <div id='calendar'></div>

                        </div>
                        <div class="col-12 col-md-6">


                            <div class="card p-4 ">

                                <div class="d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        Date:
                                    </div>
                                    <div class="selected-date" name="date">No Date Selected</div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-solid fa-calendar-check"></i>
                                        Slots Available:
                                    </div>

                                    <div class="slotss">0</div>
                                </div>

                            </div>
                            <div class="time-selection">
                                <div class="radio-inputs text-center">
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="8:00 AM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">8:00 AM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="9:00 AM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">9:00 AM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="10:00 AM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">10:00 AM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="11:00 AM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">11:00 AM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="01:00 PM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">01:00 PM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="02:00 PM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">02:00 PM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="03:00 PM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">03:00 PM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="04:00 PM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">04:00 PM</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input class="radio-input" type="radio" name="time" value="05:00 PM" disabled>
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span class="radio-label">05:00 PM</span>
                                        </span>
                                    </label>

                                </div>
                            </div>

                            <div class="card">
                                <div class="d-flex align-items-center">
                                    <div class="icon d-flex align-items-center">
                                        <i class="fa-solid fa-calendar-days fa-lg"></i>
                                        <span>Time and date
                                            <small class="d-block date-time">

                                            </small>
                                        </span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Enter Full name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group mb-2">
                                <label for="numner">Number</label>
                                <input type="text" class="form-control" name="number">

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
