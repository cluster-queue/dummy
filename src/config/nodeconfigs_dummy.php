<?php // declare config

/**
 * pre reserved action keys:
 *  - < nodekey >:defaultdeploy
 *  - < nodekey >:defaultarchive
 *  - < nodekey >:defaultactions
 */

return array(

    // nodekey/ machine hostname to connect to ( nodekey should be NODECURRENTPUB here/always )
    'node01' => array(

        // text replacements/ substitution in config files for

        'replace' => array(

            // what ever you want to do with config templates put in here.

            'NODESHAREDIP' => '192.168.169.170',// HA IP for node01 or node02 for the activ one
            'NODESDOMAINNAME' => 'node01.localdomain', // or localhost.localdomain or NODECURRENTPUB (def)
            'NODECURRENTINT' => 'node01int', // internal/ real hostname/ uname -n
            'NODECURRENTPUB' => 'node01', // key of this config! + hostname to be known in dns/ outside
        ),

        // relevant files for the replacement for this node
        // starting in: './skel'
        'files' => array(
            // no filename replacements here!
            '/dummynodes/testconfigtemplate' => '/tmp/testconfigtemplate',
        ),

        // Action configs/tokens to queue dependencies
        // Command types to execute: deploy, archive, execute
        // Note: software must be installed or an install task should be set before config
        // actions take affect. E.g. install mysql to add configs to /etc/mysql otherwise create the paths
        'actions' => array(
            //// job 1
            //    jobKey: nodekey:customID => array(
            //        type: deploy|archive|execute,
            //        value: cmd|src=>target|cmd=>array(opts)
            //        posway: before|after,
            //        poskey: nodekey:customID
            //        // default: 'posway' => 'after', 'poskey' => null,
            //    ),
            //...

            'node01:deploybuilds' => array(
                'type' => 'deploy', 'value' => array(
                    // flag to include the values from 'files' from above ('replace' key)
                    // only once per node config!
                    'files' => true,
                ),
                'posway' => 'after',
                'poskey' => null,
                // default: 'posway' => 'after', 'poskey' => null,
            ),
        ),
    ),
    //'node02' => array( ...
);
