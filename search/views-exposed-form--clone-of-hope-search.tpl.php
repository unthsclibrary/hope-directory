<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
if (!empty($q)) {
  ?>
  <?php


  // This ensures that, if clean URLs are off, the 'q' is added first so that
  // it shows up first in the URL.
  print $q;
}
?>
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
  
            <div id="edit-search-api-views-fulltext-wrapper" class="views-exposed-widget views-widget-filter-search_api_views_fulltext">
                        <div class="views-widget">
          <div class="form-item form-type-textfield form-item-search-api-views-fulltext">
 <input type="text" id="edit-search-api-views-fulltext" name="search_api_views_fulltext" value placeholder="Search by service, city or zip code" size="30" maxlength="128" class="form-text">
</div>
        </div>
              </div>

    
     <div class="views-exposed-widget views-submit-button">
        
    <input type="image" src="/sites/default/files/search-icon.jpg" id="edit-submit" class="form-submit" alt="Submit Form" />
    
    </div>
   
    <?php

if (!empty($reset_button)) {
  ?>
      <div class="views-exposed-widget views-reset-button">
        <?php

  print $reset_button;
  ?>
      </div>
    <?php

}
?>
  </div>
</div>