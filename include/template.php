<table class="table table-striped table-bordered" id="datatable">
    <thead>
        <tr>
            <th>
                Hardware_ID
            </th>
            <th>
                Type
            </th>
            <th>
                Status
            </th>
            <th>
                Model
            </th>
            <th>
                Notes
            </th>
            <th>
                Location
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($hardware as $item): ?>
        <tr>
            <td><?php echo $item['hardware_id']; ?></td>
            <td><?php echo $item['type']; ?></td>
            <td><?php echo $item['status']; ?></td>
            <td><?php echo $item['model']; ?></td>
            <td><?php echo $item['notes']; ?></td>
            <td><?php echo $item['location']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$hardware = get_hardware();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/template.php');
?>