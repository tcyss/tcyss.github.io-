## Movable Type Configuration File
##
## This file defines system-wide
## settings for Movable Type. In 
## total, there are over a hundred 
## options, but only those 
## critical for everyone are listed 
## below.
##
## Information on all others can be 
## found at:
##  https://www.movabletype.jp/documentation/config

#======== REQUIRED SETTINGS ==========

CGIPath        /ecms/
StaticWebPath  /ecms/mt-static/
StaticFilePath /var/www/vhosts/cybersecurity.metro.tokyo.lg.jp/stg.cybersecurity/ecms/mt-static

#======== DATABASE SETTINGS ==========

ObjectDriver DBI::mysql
#Database cs_mt
Database cs_mt_lgjp
#DBUser cyber-sec
DBUser cyber-sec-lgjp
#DBPassword zxkI3671!
DBPassword Si468gz$5
DBHost localhost

#======== MAIL =======================
#EmailAddressMain kueda@ewmjapan.com
EmailAddressMain prageweb@prage.jp
MailTransfer sendmail
SendMailPath /usr/lib/sendmail
    
DefaultLanguage ja

ImageDriver ImageMagick


#==========FileUpload=====20210719=============
CGIMaxUpload 102400000
AssetFileTypes MT::Asset::Image=epub
#=========FiletypeAdd====20211229==============
#AssetFileTypes MT::Asset::Image=html,xhtml
#=========FiletypeAdd====20220330==============
#=========uplode KaNou Ni SuRu file name Wo delete!==============
DeniedAssetFileExtensions ascx,asis,asp,aspx,bat,cfc,cfm,cgi,cmd,com,cpl,dll,exe,htaccess,htm,inc,jhtml,js,jsb,jsp,mht,msi,php,php2,php3,php4,php5,phps,phtm,phtml,pif,pl,pwml,py,reg,scr,sh,shtm,shtml,vbs$
