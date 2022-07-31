<?php
$clientID = '';
$clientSecret = '';
$redirect_URI = '';
$guildID = '';
$discordRedirectAuth = '';
$serverIP = '';
$port = 80; // Website port
$steamAPIkey = '';
$server_port = 30212;
$rconPassword = '';
$serverName = 'Prime Network';
$botToken = '';

// SQL INFO
$host = '';
$username = '';
$password = '';
$db = '';
$port = 3306;

$permissionsSetup = [
    '577631197987995678' => [// Start T-Mod
        'Permission.Note',
        'Permission.Warn',
        'Permission.Kick',
        'Permission.RemoveNote',
        'Permission.RemoveWarn',
    ], // End T-Mod
    '506211787214159872' => [// Start Mod
        'Permission.Note',
        'Permission.Warn',
        'Permission.Kick',
        'Permission.Tempban',
        'Permission.Ban',
        'Permission.RemoveNote',
        'Permission.RemoveWarn',
        'Permission.RemoveKick',
        'Permission.RemoveTempban',
    ], // End Mod
    '506212543749029900' => [ // Start Admin
        'Permission.Note',
        'Permission.Warn',
        'Permission.Kick',
        'Permission.Tempban',
        'Permission.Ban',
        'Permission.RemoveNote',
        'Permission.RemoveWarn',
        'Permission.RemoveKick',
        'Permission.RemoveTempban',
        'Permission.RemoveBan',
    ], // End Admin
    '577966729981067305' => [ // Start Management
        'Permission.Note',
        'Permission.Warn',
        'Permission.Kick',
        'Permission.Tempban',
        'Permission.Ban',
        'Permission.RemoveNote',
        'Permission.RemoveWarn',
        'Permission.RemoveKick',
        'Permission.RemoveTempban',
        'Permission.RemoveBan',
    ], // End Management
];
