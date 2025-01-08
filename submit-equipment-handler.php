<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $equipment_names = $_POST['equipment-name'];
    $equipment_descriptions = $_POST['equipment-description'];
    $institution_name = $_POST['institution-name'];
    $contact_email = $_POST['contact-email'];

    // Process each equipment entry
    echo "<h2>Equipment Submission Received</h2>";
    echo "<p><strong>Institution Name:</strong> $institution_name</p>";
    echo "<p><strong>Your Contact Email:</strong> $contact_email</p>";
    echo "<h3>Submitted Equipment:</h3>";

    for ($i = 0; $i < count($equipment_names); $i++) {
        echo "<p><strong>Equipment Name:</strong> " . htmlspecialchars($equipment_names[$i]) . "</p>";
        echo "<p><strong>Description:</strong> " . htmlspecialchars($equipment_descriptions[$i]) . "</p>";
        echo "<hr>";
    }

    // Redirect back to the resources page (optional)
    // header('Location: resources.html');
}
?>
