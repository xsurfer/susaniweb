<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $page->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $page->getName() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $page->getTitle() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $page->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('convenzioni/edit?id='.$page->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('convenzioni/index') ?>">List</a>
