<?php


namespace LoyaltyLu\CutFileUpload;


use Encore\Admin\Form\Field;

class CutFileFiled extends Field
{
    public $view = 'cut-file-field::cut_file_upload';

    public function render()
    {
        $name = $this->formatName($this->column);
        $this->script = <<<SRC
        $('#{$name}-cut-file').bootstrapFileInput();
        $('#{$name}-cut-file').change(function(){
             aetherupload('{$name}', this, 'file').success(getPath).upload('{$name}');
        });
SRC;
        return parent::render();
    }
}
