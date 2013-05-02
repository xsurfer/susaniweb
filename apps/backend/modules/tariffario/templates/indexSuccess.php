<h1>Pages List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Title</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $page): ?>
    <tr>
      <td><a href="<?php echo url_for('tariffario/show?id='.$page->getId()) ?>"><?php echo $page->getId() ?></a></td>
      <td><?php echo $page->getName() ?></td>
      <td><?php echo $page->getTitle() ?></td>
      <td><?php echo $page->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tariffario/new') ?>">New</a>
