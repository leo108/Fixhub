<?php

return [

    'manage'            => 'Manage SSH keys',
    'label'             => 'SSH keys',
    'none'              => 'There are currently no SSH keys setup',
    'name'              => 'Name',
    'fingerprint'       => 'Fingerprint',
    'create'            => 'Add a new SSH key',
    'edit'              => 'Edit the SSH key',
    'warning'           => 'The SSH key could not be saved, please check the form below.',
    'view_ssh_key'      => 'View the SSH Key',
    'private_ssh_key'   => 'Private SSH Key',
    'public_ssh_key'    => 'Public SSH Key',
    'ssh_key'           => 'SSH key',
    'ssh_key_info'      => 'If you have a specific private key you wish to use you can paste it here. The key must ' .
                           'not have a passphrase.',
    'ssh_key_example'   => 'An SSH key will be generated automatically if you do not enter one, this is recommended.',
    'server_keys'       => 'This key must be added to the server\'s <code>~/.ssh/authorized_keys</code> ' .
                           'for each user you wish to run commands as.',
    'git_keys'          => 'The key will also need to be added to the <strong>Deploy Keys</strong> ' .
                           'for you repository unless you are using a public/unautheticated URL.',

];
