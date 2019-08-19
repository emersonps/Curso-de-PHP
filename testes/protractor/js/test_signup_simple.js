describe('Signup test', function() {
    var name = element(by.model('$ctrl.formData.//*[@id="nomerazao"]'));
    var nascimento = element(by.model('$ctrl.formData.//*[@id="nascimento"]'));
    // var password = element(by.model('$ctrl.formData.password'));
    // var signupButton = element(by.xpath("//button[@class='btn btn-lg btn-primary pull-xs-right ng-binding']"));
    // var signed = element.all(by.xpath("//a[@class='nav-link ng-binding']")).first();
    // var text = "username has already been taken";
    // var duplicaterusername = element(by.cssContainingText('li.ng-binding.ng-scope', text));
    
   
    beforeEach(function() {
      browser.get('http://www.idealplacas.com/cad-cliente');
    });
  
    it('it should have a title', function() {
      expect(browser.getTitle()).toEqual('Sign up — Conduit');
    });

    it(' it should display error when username is duplicated', function() {

      name.sendKeys('teste');
      nascimento.sendKeys('10/01/1982');
      // password.sendKeys('123456789');

      //clica no botão e depois faz o assert
      // signupButton.click().then(function () {
      //   expect(duplicaterusername.getText()).toEqual(text);
      // }); 

     });
  
    // it('it should sign up new user', function() {
    //   username.sendKeys('eli876544');
    //   email.sendKeys('eli876544@test.te');
    //   password.sendKeys('123456789');

    //   //clica no botão e depois faz o assert
    //   signupButton.click().then(function() {
    //     expect(signed.getText()).toEqual('eli876544');
    //   }); 

    // }); 
});