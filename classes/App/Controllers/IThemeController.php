<?
namespace ApiWeMeet\Controller;

interface IThemeController{
    public function addTheme();
    public function deleteTheme();
    public function setThemeType();
    public function setThemeGroup();
    public function updateTheme();
    public function saveTheme();
}