<?php // declare config

/**
 * Default configs for all nodes.
 *
 * List of 'action' configs to perform in this order (if not changing posway/poskey)
 * on ALL nodes in your nodes config!
 *
 * If you have pre/post dependencies in your nodes config then parts of this config
 * may be handled at a later time you may expect but it would be the logical order.
 *
 * You may change order dependencies. E.g. set an empty root element an bind them in the
 * way you may need them here or in your nodes config.
 *
 * The identifier for the default config is: 'NODECURRENTPUB:your-code' where
 * NODECURRENTPUB will be replaced with the current value of the nodes config when parsing
 * the list. So you could use the keys in your nodes config to set dependencies.
 *
 * Deploy may fail because a path at the target doesnt exists yet.
 * So some tasks must be handled as action/execution first, then eg. deploy someting.
 * See below.
 */
return array(

    'actions' => array(

        'NODECURRENTPUB:defaultactions' => array(
            'type' => 'execute | deploy | archive',
            'value' => array(
                // 'vmstart NODECURRENTPUB'
                // 'sleep 20'

                // before all other: create a path first, befor copy stuff to it
                // 'mkdir -p /tmp/install-tmp' => array('type'=>'remote'),
            ),
            'posway' => 'after',
            'poskey' => null,
        ),
    ),
);
