<section id="contact" class="tm-section-pad-top tm-parallax-2">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
            });
            calendar.render();
        });
    </script>

    <div class="container tm-container-contact">

        <div class="row">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">Contact Us</h2>
            </div>

            <div class="col-sm-12 col-md-6" id="calendar">
                <a class="btn btn-primary" href="{{ route('landscape.appointments') }}">Make an appointment!</a>
            </div>

            <div class="col-sm-12 col-md-6 ContactRow">

                <div class="contact-item">
                    <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                        <i class="far fa-2x fa-envelope mr-4"></i>
                        <span class="mb-0">tejadalandscape@gmail.com</span>
                    </a>
                </div>

                <div class="contact-item">
                    <a rel="nofollow" href="https://www.google.com/maps" class="item-link">
                        <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                        <span class="mb-0">Our Location</span>
                    </a>
                </div>

                <div class="contact-item">
                    <a rel="nofollow" href="tel:0100200340" class="item-link">
                        <i class="fas fa-2x fa-phone-square mr-4"></i>
                        <span class="mb-0">760-343-6634</span>
                    </a>
                </div>

                <div class="contact-item">&nbsp;</div>

            </div>

        </div><!-- row ending -->

    </div>

    <footer class="text-center small tm-footer">
    </footer>

</section>
