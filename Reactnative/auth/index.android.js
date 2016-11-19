import { AppRegistery } from 'react-native';
import App from './src/app';

AppRegistery.registerComponent('auth', () => App);