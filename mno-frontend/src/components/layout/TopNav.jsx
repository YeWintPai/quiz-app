import React from 'react'


const TopNav = ({children}) => {
  return (
    <>
        <nav className='flex flex-row justify-between bg-bars text-gray-50 py-2 items-center'>
            <a href="#" className='ml-5'>
              <img src="./src/assets/logoItem.svg" className='w-16' alt="codecrafterquiz" />
            </a>
            <div className='flex flex-row justify-evenly gap-6'>
              <a href="" className='menubarItem'> Home </a>
              <a href="" className='menubarItem'> Feedback </a>
              <a href="" className='menubarItem'> About Us </a>
              <a href="" className='menubarItem'> Setting </a>
            </div>
        </nav>
        {children}
    </>
  )
}

export default TopNav;