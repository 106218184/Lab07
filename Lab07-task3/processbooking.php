<?php
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$food = isset($_POST['food']) ? $_POST['food'] : 'none';
$partysize = isset($_POST['partysize']) ? $_POST['partysize'] : '';

$species_code = isset($_POST['species']) ? $_POST['species'] : '';
$species_map = array(
    'M' => 'Human', 'D' => 'Dwarf', 'E' => 'Elf', 'H' => 'Hobbit');
$species_name = isset($species_map[$species_code]) ? $species_map[$species_code] : 'Unknown';

$food_map = array(
    'none' => "None", 'lembas' => "Lembas", 'mushrooms' => 'Mushrooms', 'ent' => 'Ent Draft', 'cram' => 'Cram');
$food_name = isset($food_map[$food]) ? $food_map[$food] : 'None';

$booked = array();
 if (isset($_POST['accom'])) {
    $booked[] = 'Accomodation';
 }
 if (isset($_POST['4day'])) {
    $booked[] = 'Four-Day Tour';
 }
if (isset($_POST['10day'])) {
    $booked[] = 'Ten-Day Tour';
 }

if (count($booked) > 0) {
    if (count($booked) == 1) {
        $booking_text = $booked[0];
    } else {
        $last_item = array_pop($booked);
        $booking_text = implode(', ', $booked) . ' and ' . $last_item;
    }
} else {
    $booking_text = 'no tours selected';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <p>Welcome <?php echo htmlspecialchars($firstname . ' ' . $lastname); ?></p>
    <p>You are now booked on the <?php echo htmlspecialchars($booking_text); ?></p>
    <p>Species: <?php echo htmlspecialchars($species_name); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>
    <p>Meal Preference: <?php echo htmlspecialchars($food_name); ?></p>
    <p>Number of travellers: <?php echo htmlspecialchars($partysize); ?></p>
    
</body>
</html>