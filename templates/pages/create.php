<div>
  <h3> nowa notatka </h3>
  <div>
    <?php if($params["created"]): ?>
    <div> <?php echo($params["title"])  ?> </div>  
    <div> <?php echo $params["description"]  ?> </div>  
      <?php else:  ?>
  <form method="post" action="?action=create" class="note-form">
  <ul>
    <li>
      <label for="title">Tytul <span class="required">*</span></label>
      <input type="text" name="title" class="field-long" />
    </li>
    <li>
      <label for="description">Treść</label>
      <textarea
        name="description"
        id="field5"
        class="field-long field-textarea"
      ></textarea>
    </li>
    <li>
      <input type="submit" value="Submit">
    </li>
  </ul>
</form>
<?php endif;  ?>
  </div>
</div>