<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       yankinndenis@gmail.com
 * @since      1.0.0
 *
 * @package    Segrow
 * @subpackage Segrow/public/partials
 */
?>

<h1>Segrow CRM</h1>
<form id="get" action="javascript:void(0)" method="POST">

    <table>
        <tr>
            <td>Segrow CRM</td>
        </tr>

        <tr>
            <td>
                Form ID
            </td>
            <td colspan="2">
                    <input type="text" name="form_id" value="">
            </td>
            <td></td>
        </tr>
    </table>

    <table>
    <thead>
        <th>Show form ids:</th>
    </thead>
        <tbody>
            <tr>
                <td>
                    <div style="position: relative; width: 83vw; overflow: auto;" class="textarea">
                        <button type="button" class="button_show">Show convertkit forms</button>
                    <pre>
                        <div class="forms_ids"></div>
                    </pre>
                </td>
                <td></td>
                    
            </tr>
        </tbody>
    </table>

    <table>
        <tr>
            <td>Show form</td>
            <td>
                <label class="checkbox-green">
                    <input type="checkbox" name="show_form">
                    <span class="checkbox-green-switch" data-label-on="On" data-label-off="Off"></span>
                </label>
            </td>
        </tr>

    </table>
    <input type="hidden" name="action" value="chekoptions">
    <button class="save_mailchimp" type="submit">Save</button>
</form>
<p id="loading"></p>
