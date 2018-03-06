# En la primera línea se conecta al dominio. Esta línea requiere ser modificada.
$Path= "LDAP://CN=Users,DC=alorca,DC=1a"
$name = "Alejandro OC"
$NTname = "AlejandroOC"
$ou = New-Object Directoryservices.DirectoryEntry($Path)
$user = $ou.PSBase.Children.Add("CN=" + $name,'user')
$user.PSBase.CommitChanges()
$user.SAMAccountName = $NTname
$user.Description = "User_1"
$user.PSBase.CommitChanges()
$user.SetPassword("administracion")
