<?php
/* ------------------------------------------------------------------------
  # Jootstrap - Twitter's Bootstrap for Joomla (with RocketTheme's Gantry administration)
  # ------------------------------------------------------------------------
  # author    Prieco S.A.
  # copyright Copyright (C) 2012 Prieco.com. All Rights Reserved.
  # @license - http://http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
  # Websites: http://www.prieco.com
  # Technical Support:  Forum - http://www.prieco.com/en/forum/index.html
  ------------------------------------------------------------------------- */
// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>
<div class="categories-list<?php echo $this->pageclass_sfx; ?>">
    <?php if ($this->params->get('show_page_heading', 1)) : ?>
        <h1>
            <?php echo $this->escape($this->params->get('page_heading')); ?>
        </h1>
    <?php endif; ?>
    <?php if ($this->params->get('show_base_description')) : ?>
        <?php //If there is a description in the menu parameters use that; ?>
        <?php if ($this->params->get('categories_description')) : ?>
            <div class="category-desc base-desc">
                <?php echo JHtml::_('content.prepare', $this->params->get('categories_description')); ?>
            </div>
        <?php else: ?>
            <?php //Otherwise get one from the database if it exists.  ?>
            <?php if ($this->parent->description) : ?>
                <div class="category-desc base-desc">
                    <?php echo JHtml::_('content.prepare', $this->parent->description); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php
    echo $this->loadTemplate('items');
    ?>
</div>
