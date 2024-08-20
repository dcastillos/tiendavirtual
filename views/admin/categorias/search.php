<table style="border:1px solid black">
    <thead>
        <tr>
            <th style="border:1px solid black">Codigo</th>
            <th style="border:1px solid black">Nombre</th>
            <th style="border:1px solid black">Fecha Creacion</th>
            <th style="border:1px solid black">Fecha ultima modificacion</th>
        </tr>
    </thead>
    <body>
        <?php foreach($listado as $item): ?>
            <tr>
                <td style="border:1px solid black"><?php echo $item->codigo?></td>
                <td style="border:1px solid black"><?php echo $item->nombre?></td>
                <td style="border:1px solid black"><?php echo $item->created_at?></td>
                <td style="border:1px solid black"><?php echo $item->update_at?></td>
            </tr>
        <?php endforeach; ?>
    </body>
</table>