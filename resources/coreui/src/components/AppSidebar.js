import React, { useEffect } from 'react'
import { useSelector, useDispatch } from 'react-redux'

import { CSidebar, CSidebarBrand, CSidebarNav, CSidebarToggler } from '@coreui/react'
import CIcon from '@coreui/icons-react'

import { AppSidebarNav } from './AppSidebarNav'

import { logoNegative } from '../assets/brand/logo-negative'
import { sygnet } from '../assets/brand/sygnet'

import SimpleBar from 'simplebar-react'
import 'simplebar/dist/simplebar.min.css'

import { navAction } from '../actions'

const AppSidebar = () => {
  const dispatch = useDispatch()
  const unfoldable = useSelector((state) => state.sidebar.sidebarUnfoldable)
  const sidebarShow = useSelector((state) => state.sidebar.sidebarShow)
  const navigation = useSelector((state) => state.nav.data)
  const location = window.location.pathname

  useEffect(() => {
    if (navigation.length === 0) {
      //check path
      if (location.includes('/dashboard') || location.includes('/category')) {
        dispatch(navAction.loadNavMain())
      } else if (location.includes('/project')) {
        dispatch(navAction.loadNavProject())
      } else if (location.includes('/settings')) {
        dispatch(navAction.loadNavSetting())
      }
    }
  }, [])

  return (
    <CSidebar
      position="fixed"
      unfoldable={unfoldable}
      visible={sidebarShow}
      onVisibleChange={(visible) => {
        dispatch({ type: 'set', sidebarShow: visible })
      }}
    >
      <CSidebarBrand className="d-none d-md-flex" to="/">
        <CIcon className="sidebar-brand-full" icon={logoNegative} height={35} />
        <CIcon className="sidebar-brand-narrow" icon={sygnet} height={35} />
      </CSidebarBrand>
      <CSidebarNav>
        <SimpleBar>
          <AppSidebarNav items={navigation} />
        </SimpleBar>
      </CSidebarNav>
      <CSidebarToggler className="d-none d-lg-flex" onClick={() => dispatch({ type: 'set', sidebarUnfoldable: !unfoldable })} />
    </CSidebar>
  )
}

export default React.memo(AppSidebar)
