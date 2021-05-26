<?php
shell_exec("cd sites");
shell_exec("cd viamedo.fr");
shell_exec("cd VMS");
shell_exec('export PATH="$HOME/.symfony/bin:$PATH"');
shell_exec("symfony cache:clear");
echo "cache cleared";