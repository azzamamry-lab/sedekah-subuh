@echo off
REM ============================================
REM  Jalankan server Laravel Sedekah Subuh
REM ============================================
set PHP_DIR=%LOCALAPPDATA%\Microsoft\WinGet\Packages\PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe
set PATH=%PHP_DIR%;%PATH%

cd /d "%~dp0"
echo.
echo  Menjalankan Laravel Sedekah Subuh...
echo  Buka browser ke: http://127.0.0.1:8000
echo  Tekan Ctrl+C untuk berhenti.
echo.
php artisan serve
