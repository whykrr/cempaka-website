import { authHeader } from '../utils/helpers/auth-header'
import axios from 'axios'

const APIBaseURL = process.env.MIX_APP_API_URL

const openAPIRequest = (method, url, data) => {
  return axios({
    method,
    url: `${APIBaseURL}${url}`,
    data,
  })
}

const privateAPIRequest = (method, url, data) => {
  return axios({
    method,
    headers: authHeader(),
    url: `${APIBaseURL}${url}`,
    data,
  })
}

export const APIService = {
  openAPIRequest,
  privateAPIRequest,
}