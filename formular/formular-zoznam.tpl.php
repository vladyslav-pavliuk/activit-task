<?php
// $Id$

/**
 *@file
 * HTML for an items in the formular listing.
 *
 * Available variables:
 *
 * - $formular_data: all data from all forms
 *
 * @see formular_preprocess_formular_block_item()
*/
?>

<table class="main-table" style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Last Name</th>
    <th>Street</th>
    <th>Phone</th>
    <th>Postal code</th>
    <th>City</th>
    <th>IBAN</th>
  </tr>
  <?php foreach ($data as $item): ?>
  <tr>
    <td><?php print $item->id; ?></td>
    <td><?php print $item->name; ?></td>
    <td><?php print $item->lastname; ?></td>
    <td><?php print $item->street; ?></td>
    <td><?php print $item->phone; ?></td>
    <td><?php print $item->pc; ?></td>
    <td><?php print $item->city; ?></td>
    <td><?php print $item->iban; ?></td>
    <td><a href="<?php print '/formular/' . $item->id . '/delete'; ?>">Delete</a></td>
  </tr>
  <?php endforeach; ?>
</table>

