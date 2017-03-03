  <form action="book_page.php" method="post">
    <!-- creates the form of a customer review -->


    <h2>Customer review</h2>
    <!-- creates heading -->
    USER_EMAIL: <!-- creates heading -->
     <input name="USER_EMAIL" type="text">
    <!-- creates a input to put data inside-->
     BOOK_ISBN: <!-- creates heading -->
     <input name="BOOK_ISBN" type="text">
    <!-- creates a input to put data inside-->
    TEXT_REVIEW:<br />
    <!-- creates heading -->
    <textarea cols="80" name="TEXT_REVIEW" rows="10"></textarea>
    <!-- creates a input to put data inside-->
    <br />
    REVIEW_RATING:<br />
    <!-- creates heading -->
     <select name="REVIEW_RATING">
      <!-- creates a select for rating -->


      <option value="1">
        1
      </option><!-- option for select -->


      <option value="2">
        2
      </option><!-- option for select -->


      <option value="3">
        3
      </option><!-- option for select -->


      <option value="4">
        4
      </option><!-- option for select -->


      <option value="5">
        5
      </option><!-- option for select -->
    </select><!-- end select tag -->


    <p>Click to submit <input name="submit" type="submit" value="Submit"></p>
    <!-- creates a submit button -->
  </form>
  <!-- closes form tagt -->

