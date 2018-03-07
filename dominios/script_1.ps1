$Domain = 'alorca.1a'
$hostname = Read-Host -Prompt 'Nombre del equipo'
Rename-Computer $hostname
Add-computer -domainname $Domain -Credential alorca\user -newname $hostname -Restart
