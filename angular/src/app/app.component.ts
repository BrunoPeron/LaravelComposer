import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'angular';
  logs: string[] = [];
  log = '';
  add(): void {
    this.logs.push(this.log);
  }
}
