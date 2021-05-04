<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Отчество</th>
      <th scope="col">Возраст</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($students as $item): ?>
    <tr>
      <th scope="row"><?= $item->id?></th>
      <td><?= $item->fname?></td>
      <td><?= $item->lname?></td>
      <td><?= $item->mname?></td>
      <td><?= $item->age?></td>
      <td><?= $item->email?></td>  
    </tr>
    <?php endforeach;?>
  </tbody>
</table>