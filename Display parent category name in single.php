<h1>
            <?php
               foreach((get_the_category()) as $childcat) {
               $parentcat = $childcat->category_parent;
               if ($parentcat) break;  // Save only first parent
               }
               $sep = '';
               $parentname = '';
               if ($parentcat) {
               $parentname = get_cat_name($parentcat);
               echo $parentname;
               $sep = '&nbsp;/&nbsp;';
               }
               foreach (get_the_category() as $category) {
               $cat_name = $category->cat_name;
               if ($cat_name != $parentname) {
               echo $sep;
               echo $cat_name;
               }
               $sep = '&nbsp;/&nbsp;';
               }
            ?>   
         </h1>
