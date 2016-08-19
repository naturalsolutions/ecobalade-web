#!/bin/bash
#Script qui à pour but de maj les fileSizes enregistré en base
for f in ../../www/sites/default/files/full/*.jpg ; do 
	fullFileName="$f";
	fileSize=$(stat -c%s "$fullFileName");
	
	resultat=$fullFileName;
	echo $resultat";"$fileSize;	
done
