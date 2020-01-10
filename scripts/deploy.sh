SPATH="."
DPATH="D:/xampp/htdocs/nextrem/api"
rm -rf ${DPATH}
mkdir ${DPATH}
cp -a ${SPATH} ${DPATH}
( cd ${DPATH} && php artisan storage:link )