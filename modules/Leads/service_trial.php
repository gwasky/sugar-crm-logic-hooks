<?php

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que

        if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

        class lead_servicetrial{

                function lead_servicetrial(&$bean, $event, $arguments){

                        // make sure the status was actually changed to closed
                        // $bean->fetched_row['status'] is the stored status of the case
                        // $bean->status is the status it was changed to
                        if ($bean->fetched_row['qs_queues_leads_name'] !== 'Service Trial' && $bean->qs_queues_leads_name === 'Service Trial')

                        {

                                $subject = "Service Trial";

                                $body .= "{$bean->first_name} - {$bean->last_name} has been assigned to Service Trial queue. Contact Sales rep '{$bean->sales_rep_c}' for additional details. Please Check the queue, http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=Leads&record={$bean->id}";
                                $to = 'grace.kigundu@waridtel.co.ug,moses.wamono@waridtel.co.ug,corporatesales@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,PRODUCTS&SERVICES@waridtel.co.ug,BUSINESSCENTERKAMPALA@waridtel.co.ug,creditcollection@waridtel.co.ug,akugizibwe.simon@waridtel.co.ug,lorna.otieno@waridtel.co.ug';



                                $headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";



                                mail($to,$subject,$body,$headers);


                        }
                }
        }

?>

