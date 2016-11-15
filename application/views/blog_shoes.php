<?php echo validation_errors(); ?>

<?php echo form_open('blog/shoes') ?>

    <label for="text">溫度:</label>
    <input type="input" name="temp" /><br />

    <label for="text">濕度:</label>
    <input type="input" name="huma" /><br />

    <input type="submit" name="submit" value="輸入溫濕值" />

</form>