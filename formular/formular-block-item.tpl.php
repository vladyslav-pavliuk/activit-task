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
  <?php foreach ($formular_data as $data): ?>
  <tr>
    <td><?php print $data->id; ?></td>
    <td><?php print $data->name; ?></td>
    <td><?php print $data->lastname; ?></td>
    <td><?php print $data->street; ?></td>
    <td><?php print $data->phone; ?></td>
    <td><?php print $data->pc; ?></td>
    <td><?php print $data->city; ?></td>
    <td><?php print $data->iban; ?></td>
    <td><button type="submit" name="<?php print $data->id; ?>"">Vymazať</button></td>
    <?php if (isset($_POST[$data->id])): ?>
    <?php db_delete('formular')->condition('id', $data->id)->execute(); ?>
    <?php endif; ?>
  </tr>
  <?php endforeach; ?>
</table>

