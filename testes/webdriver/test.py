import unittest
from selenium import webdriver
from selenium.webdriver.common.keys import Keys


class PythonOrgSearch(unittest.TestCase):

    def setUp(self):
        self.driver = webdriver.Chrome(
            executable_path=r'C:\xampp\htdocs\idealplacas\testes\webdriver\downloads\chromedriver.exe')

    def test_new_user(self):
        driver = self.driver
        driver.get("http://www.idealplacas.com/")

        btnLogin = driver.find_element_by_xpath("/html/body/header/div[2]/section/figure[2]/a/i")
        btnLogin.click()

        btnContinuar = driver.find_element_by_xpath("/html/body/main/div/div/form[1]/button")
        btnContinuar.click()
        driver.implicitly_wait(5)

        elemRazaoSocial = driver.find_element_by_xpath("//*[@id='nomerazao']")
        elemRazaoSocial.click()
        elemRazaoSocial.send_keys("Sandri Emilly")
        driver.implicitly_wait(5)

        elemGenero = driver.find_element_by_xpath("//*[@id='genero']")
        all_options = elemGenero.find_elements_by_tag_name("option")

        for option in all_options:
            if option.text == 'Feminino':
                option.click()
            else:
                print('Não existe esse elemento')

        elemNasc = driver.find_element_by_xpath("//*[@id='nascimento']")
        elemNasc.click()
        elemNasc.send_keys("16/10/2009")

        elemEstado = driver.find_element_by_xpath("//*[@id='estado']")
        all_options = elemEstado.find_elements_by_tag_name("option")

        for option in all_options:
            if option.text == 'Bahia':
                option.click()
            else:
                print('Não existe esse elemento')

        driver.implicitly_wait(20)







    def tearDown(self):
        self.driver.close()


if __name__ == "__main__":
    unittest.main()
