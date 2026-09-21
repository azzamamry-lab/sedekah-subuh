@echo off
REM ================================================================
REM  Nyalakan Laravel + link publik (Cloudflare Tunnel)
REM  Setelah jalan, link publik muncul di baris "trycloudflare.com"
REM ================================================================
set PHP_DIR=%LOCALAPPDATA%\Microsoft\WinGet\Packages\PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe
set PATH=%PHP_DIR%;%PATH%

cd /d "%~dp0"

echo.
echo  ==========================================
echo   SEDEKAH SUBUH - Jalankan + Link Publik
echo  ==========================================
echo.
echo  [1/2] Menyalakan server Laravel...
start "Laravel Sedekah Subuh" cmd /k "set PATH=%PHP_DIR%;%PATH% && php artisan serve --host=127.0.0.1 --port=8088"

timeout /t 4 /nobreak >nul

echo  [2/2] Membuat link publik...
echo.
echo  Tunggu sekitar 20 detik, lalu cari baris berisi:
echo     https://xxxxx.trycloudflare.com
echo.
echo  Link itu bisa dibuka dari HP atau dibagikan.
echo  Tutup jendela ini untuk mematikan link publik.
echo.

"%~dp0..\_tunnel\cloudflared.exe" tunnel --url http://127.0.0.1:8088 --no-autoupdate

pause
