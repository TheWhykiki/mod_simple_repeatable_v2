<?php

/**

 * Whykiki Kontakte Nodul

 */

use Joomla\CMS\HTML\HTMLHelper;

defined( '_JEXEC' ) or die( 'Restricted access' );
$chunkdedIcons = array_chunk($quicklinks, 4);
?>
<div class="card mb-3 ">
    <div class="card-body">
        <nav class="quick-icons px-3 pb-3" aria-label="Schnellstartlinks Site">
            <ul class="nav flex-wrap">
                <?php foreach ($quicklinks as $item): ?>
                <li class="quickicon-group">
                    <ul class="list-unstyled d-flex w-100">
                        <li class="quickicon">
                            <a class="" target="<?= $item['target']; ?>" href="<?php echo $item['link']; ?>">
                                <div class="quickicon-info">
                                    <div class="quickicon-icon">
                                        <i class="fa <?php echo $item['icon']; ?> fa-2x"></i>
                                    </div>
                                </div>
                                <div class="quickicon-name d-flex align-items-end">
                                    <?php echo $item['titel']; ?>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
