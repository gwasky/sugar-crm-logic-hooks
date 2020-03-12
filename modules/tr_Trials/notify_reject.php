<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

        class notify_reject{

                function notify_reject(&$bean, $event, $arguments){



                        // make sure the status was actually changed to closed
                        // $bean->fetched_row['status'] is the stored status of the case
                        // $bean->status is the status it was changed to
                        if ($bean->fetched_row['approval_status_c'] !== 'Rejected' && $bean->approval_status_c === 'Rejected')

                        {

                                $subject = "Lead Service Trial Rejected";

                                $body .= "Dear Sales  The Lead '{$bean->leads_tr_trials_name}' wimax service trial has been rejected by Products and Services.
                                
                                         
                               Click link below for Details can be found here;
                                
                                http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=tr_Trials&record={$bean->id}";
                                $to = 'corporatesales@waridtel.co.ug,phiona.ireemera@waridtel.co.ug,CREDITCOLLECTION@waridtel.co.ug,ra@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,revenuerecognition@waridtel.co.ug';




                                $headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";



                                mail($to,$subject,$body,$headers);


                        }
                }
        }

?>

