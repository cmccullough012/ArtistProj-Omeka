<?php

/**
 * Exhibit gallery view helper.
 * 
 * @package ExhibitBuilder\View\Helper
 */
class ExhibitBuilder_View_Helper_ExhibitAttachmentGallery extends Zend_View_Helper_Abstract
{
    /**
     * Return the markup for a gallery of exhibit attachments.
     *
     * @uses ExhibitBuilder_View_Helper_ExhibitAttachment
     * @param ExhibitBlockAttachment[] $attachments
     * @param array $fileOptions
     * @param array $linkProps
     * @return string
     */
    public function exhibitAttachmentGallery($attachments, $fileOptions = array(), $linkProps = array())
    {
        if (!isset($fileOptions['imageSize'])) {
            $fileOptions['imageSize'] = 'square_thumbnail';
        }
//        
//        foreach ($attachments as $attachment):
//            $item = $attachment->getItem();
//        endforeach;
//        
        
        
        $html = '';
        foreach  ($attachments as $attachment) {
            $item = $attachment->getItem();
            $description = metadata($item, array('Dublin Core', 'Description'), array('snippet' => 150));
            $html .= '<div class="exhibit-item '.$description.' exhibit-gallery-item">';
            $html .= $this->view->exhibitAttachment($attachment, $fileOptions, $linkProps, true);
            $html .= '</div>';
        }
    
        return apply_filters('exhibit_attachment_gallery_markup', $html,
            compact('attachments', 'fileOptions', 'linkProps'));
    }
}
