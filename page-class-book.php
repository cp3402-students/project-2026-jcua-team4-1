<?php
/**
 * Template Name: Book Classes Page
 */

get_header();

/*
 * Demo booked slots.
 * For now this is hard-coded.
 * Later you should load these from database.
 */
$booked_slots = array(
    '2026-04-12' => array('Hot Shots Program|09:00 AM', 'Squad Training|04:00 PM'),
    '2026-04-13' => array('Private Classes|10:00 AM'),
    '2026-04-14' => array('Hot Shots Program|11:00 AM', 'Private Classes|03:00 PM'),
);

$class_options = array(
    'Hot Shots Program' => array('09:00 AM', '11:00 AM', '02:00 PM'),
    'Squad Training'    => array('04:00 PM', '05:30 PM'),
    'Private Classes'   => array('10:00 AM', '12:00 PM', '03:00 PM'),
    'Tournament Travel' => array('08:00 AM')
);

$success_message = '';
$selected_date = isset($_POST['booking_date']) ? sanitize_text_field($_POST['booking_date']) : '';
$selected_class = isset($_POST['class_type']) ? sanitize_text_field($_POST['class_type']) : '';
$selected_time = isset($_POST['class_time']) ? sanitize_text_field($_POST['class_time']) : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_booking'])) {
    $customer_name = sanitize_text_field($_POST['customer_name']);
    $customer_email = sanitize_email($_POST['customer_email']);
    $customer_phone = sanitize_text_field($_POST['customer_phone']);

    $slot_key = $selected_class . '|' . $selected_time;
    $is_booked = isset($booked_slots[$selected_date]) && in_array($slot_key, $booked_slots[$selected_date], true);

    if (!$is_booked && !empty($customer_name) && !empty($customer_email) && !empty($selected_date) && !empty($selected_class) && !empty($selected_time)) {
        $success_message = 'Your booking request has been submitted successfully.';
    }
}
?>

<main id="primary" class="site-main booking-page-wrap">

    <section class="booking-hero">
        <div class="booking-hero-content">
            <h1>BOOK CLASSES</h1>
            <p>Select your preferred class, choose an available date and time, and book online.</p>
        </div>
    </section>

    <section class="booking-page container">

        <div class="booking-grid">

            <div class="booking-form-card">
                <h2>Online Booking Form</h2>

                <?php if (!empty($success_message)) : ?>
                    <div class="booking-success">
                        <?php echo esc_html($success_message); ?>
                    </div>
                <?php endif; ?>

                <form method="post" class="booking-form" id="bookingForm">
                    <div class="form-row">
                        <label for="customer_name">Full Name</label>
                        <input type="text" id="customer_name" name="customer_name" required>
                    </div>

                    <div class="form-row">
                        <label for="customer_email">Email Address</label>
                        <input type="email" id="customer_email" name="customer_email" required>
                    </div>

                    <div class="form-row">
                        <label for="customer_phone">Phone Number</label>
                        <input type="text" id="customer_phone" name="customer_phone" required>
                    </div>

                    <div class="form-row">
                        <label for="class_type">Choose Class</label>
                        <select id="class_type" name="class_type" required>
                            <option value="">Select a class</option>
                            <?php foreach ($class_options as $class_name => $times) : ?>
                                <option value="<?php echo esc_attr($class_name); ?>" <?php selected($selected_class, $class_name); ?>>
                                    <?php echo esc_html($class_name); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="booking_date">Choose Date</label>
                        <input type="date" id="booking_date" name="booking_date" value="<?php echo esc_attr($selected_date); ?>" required>
                    </div>

                    <div class="form-row">
                        <label for="class_time">Choose Time</label>
                        <select id="class_time" name="class_time" required>
                            <option value="">Select time</option>
                        </select>
                    </div>

                    <button type="submit" name="submit_booking" class="booking-submit-btn">Submit Booking</button>
                </form>
            </div>

            <div class="booking-schedule-card">
                <h2>Class Schedule</h2>
                <p class="booking-note">
                    Greyed-out times are already booked and cannot be selected.
                </p>

                <div class="schedule-groups">
                    <?php foreach ($class_options as $class_name => $times) : ?>
                        <div class="schedule-group">
                            <h3><?php echo esc_html($class_name); ?></h3>
                            <div class="schedule-times">
                                <?php foreach ($times as $time) : ?>
                                    <span class="schedule-pill available"><?php echo esc_html($time); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="schedule-status">
                    <span class="legend available-box"></span> Available
                    <span class="legend booked-box"></span> Booked
                </div>
            </div>

        </div>

    </section>

</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const classType = document.getElementById("class_type");
    const bookingDate = document.getElementById("booking_date");
    const classTime = document.getElementById("class_time");

    const classOptions = <?php echo wp_json_encode($class_options); ?>;
    const bookedSlots = <?php echo wp_json_encode($booked_slots); ?>;

    function updateTimeOptions() {
        const selectedClass = classType.value;
        const selectedDate = bookingDate.value;

        classTime.innerHTML = '<option value="">Select time</option>';

        if (!selectedClass || !selectedDate || !classOptions[selectedClass]) {
            updateScheduleDisplay();
            return;
        }

        const bookedForDate = bookedSlots[selectedDate] || [];

        classOptions[selectedClass].forEach(function (time) {
            const slotKey = selectedClass + "|" + time;
            const option = document.createElement("option");
            option.value = time;
            option.textContent = time;

            if (bookedForDate.includes(slotKey)) {
                option.disabled = true;
                option.textContent = time + " — Booked";
            }

            classTime.appendChild(option);
        });

        updateScheduleDisplay();
    }

    function updateScheduleDisplay() {
        const selectedDate = bookingDate.value;
        const groups = document.querySelectorAll(".schedule-group");

        groups.forEach(function(group) {
            const className = group.querySelector("h3").textContent.trim();
            const pills = group.querySelectorAll(".schedule-pill");
            const bookedForDate = bookedSlots[selectedDate] || [];

            pills.forEach(function(pill) {
                const time = pill.textContent.trim();
                const slotKey = className + "|" + time;

                pill.classList.remove("booked");
                pill.classList.add("available");

                if (bookedForDate.includes(slotKey)) {
                    pill.classList.remove("available");
                    pill.classList.add("booked");
                }
            });
        });
    }

    classType.addEventListener("change", updateTimeOptions);
    bookingDate.addEventListener("change", updateTimeOptions);

    updateTimeOptions();
});
</script>

<?php
get_footer();
?>