<?php namespace Anomaly\InstallerModule\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class InstallerFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\InstallerModule\Form
 */
class InstallerFormBuilder extends FormBuilder
{

    /**
     * The form actions.
     *
     * @var array
     */
    protected $actions = [
        'save'
    ];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [
        'layout_view' => 'anomaly.module.installer::layouts/installer',
        'breadcrumb'  => 'anomaly.module.installer::breadcrumb.installer',
        'handler'     => 'Anomaly\InstallerModule\Form\InstallerFormHandler@handle'
    ];

}
