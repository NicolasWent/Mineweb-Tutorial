<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <div id="text-page">
                        <table class="table">
                            <thead>
                            <th><?= $Lang->get('TUTORIAL__ID'); ?></th>
                            <th><?= $Lang->get('TUTORIAL__PSEUDO'); ?></th>
                            <th><?= $Lang->get('TUTORIAL__DATE'); ?></th>
                            </thead>
                            <tbody>
                            <?php foreach ($datas as $data): ?>
                                <tr>
                                    <td><?= $data['Info']['id']; ?></td>
                                    <td><?= $data['Info']['pseudo']; ?></td>
                                    <td><?= $data['Info']['date']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
