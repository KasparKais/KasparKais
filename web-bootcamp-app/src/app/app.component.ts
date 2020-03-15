import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'web-bootcamp-app';
  name = 'Ed';
  show = false;
  btn_class_green = false;
  sports: any[] = [{
    id: 1,
    name: "hockey",
    test: 1
  }, {
    id: 2,
    name: "tennis"
  }, {
    id: 3,
    name: "basketball"
  }]

  constructor (
    private http: HttpClient
  ) {

  }
  ngOnInit() {
    setTimeout(() => {
      this.name = "Jon";
    }, 10000);

    setInterval(() => {
      this.show = !this.show;
    }, 3000)
  }

  toggleClass() {
    this.btn_class_green = !this.btn_class_green;
  }

  users: User[];
  hasUsersData = false;
  getData() {
    if (!this.hasUsersData) {
      this.http.get('https://reqres.in/api/users').toPromise()
      .then(
        (response: any) => { 
          console.log(response.data)
          this.users = response.data.map(row => new User(row));
          console.log(this.users);
        },
        (rejection) => {}
      )
      this.hasUsersData = true;
    }
  }
}
class User {
  id: number;
  name: string;
  email: string;

  constructor($data) {
    this.id = $data['id']
    this.email = $data['email']
    this.name = $data['first_name'] + ' ' + $data['last_name']
  }

  toggleListAccess() {

    localStorage.canAccessList = localStorage.canAccessList === 'true' ? false : true;
  }
}