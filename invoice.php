<?php

// Sample data for the invoice
$client_id = 1; // Replace with actual client ID
$invoice_date = date("Y-m-d"); // Today's date
$invoice_items = array(
  array(
    "description" => "Product A",
    "quantity" => 2,
    "unit_price" => 10.00
  ),
  array(
    "description" => "Service B",
    "quantity" => 1,
    "unit_price" => 25.50
  )
);

// Generate a unique invoice number (replace with your preferred method)
$invoice_number = uniqid("INV-");

// Calculate total invoice amount
$total_amount = 0;
foreach ($invoice_items as $item) {
  $total_amount += $item["quantity"] * $item["unit_price"];
}

// Insert invoice data
$sql = "INSERT INTO invoices (client_id, invoice_date, invoice_number, total_amount) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("iiss", $client_id, $invoice_date, $invoice_number, $total_amount);
$stmt->execute();
$invoice_id = $mysqli->insert_id; // Get the newly inserted invoice ID

// Insert invoice items
foreach ($invoice_items as $item) {
  $sql = "INSERT INTO invoice_items (invoice_id, description, quantity, unit_price, total_price) VALUES (?, ?, ?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $item_total_price = $item["quantity"] * $item["unit_price"];
  $stmt->bind_param("iissd", $invoice_id, $item["description"], $item["quantity"], $item["unit_price"], $item_total_price);
  $stmt->execute();
}

// Success message (you can customize this further)
echo "Invoice created successfully! Invoice ID: " . $invoice_id;

// Close connection (optional, depending on your approach)
$mysqli->close();

?>