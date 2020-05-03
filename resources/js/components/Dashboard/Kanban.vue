<template>
  <div class="h-screen flex">
    <KanbanSideNav />
    <div class="flex-1 min-w-0 flex flex-col bg-white z-0">
      <KanbanHeader />
      <div class="flex-1 overflow-auto">
        <main class="p-3 h-full inline-flex overflow-hidden">
          <div 
            v-for="column in columns"
            :key="column.title"
            class="ml-3 flex-shrink-0 flex flex-col py-3 w-72 bg-gray-100 rounded-md"
          >
            <h2 class="px-3 pb-1 text-sm font-medium text-gray-700">
              {{ column.title }}
            </h2>
            <div class="flex-1 min-h-0 overflow-y-auto">
              <ul class="mt-2 ">
                <draggable
                  :list="column.tasks"
                  :animation="200"
                  ghost-class="ghost-card"
                  group="tasks"
                >
                  <TaskCard
                    v-for="task in column.tasks"
                    :key="task.id"
                    :task="task"
                    class="mt-3 cursor-move"
                  />
                </draggable>
              </ul>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>
<script>

import draggable from "vuedraggable";
import TaskCard from '../Kanban/TaskCard.vue'
import KanbanSideNav from '../Kanban/KanbanSideNav.vue'
import KanbanHeader from '../Kanban/KanbanHeader.vue'

export default {
  components: {
    draggable,
    TaskCard,
    KanbanSideNav,
    KanbanHeader
  },
  data() {
    return {
      columns: [
        {
          title: "Backlog",
          tasks: [
            {
              id: 1,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Completed"
            },
            {
              id: 2,
              title: "Provide documentation on integrations",
              date: "Sep 12"
            },
            {
              id: 3,
              title: "Design shopping cart dropdown",
              date: "Sep 9",
              type: "New"
            },
            {
              id: 4,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Feature Request"
            },
            {
              id: 5,
              title: "Test checkout flow",
              date: "Sep 15",
              type: "QA"
            }
          ]
        },
        {
          title: "In Progress",
          tasks: [
            {
              id: 6,
              title: "Design shopping cart dropdown",
              date: "Sep 9",
              type: "Design"
            },
            {
              id: 7,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Feature Request"
            },
            {
              id: 8,
              title: "Provide documentation on integrations",
              date: "Sep 12",
              type: "Backend"
            }
          ]
        },
        {
          title: "Completed",
          tasks: [
            {
              id: 9,
              title: "Provide documentation on integrations",
              date: "Sep 12"
            },
            {
              id: 10,
              title: "Design shopping cart dropdown",
              date: "Sep 9",
              type: "Design"
            },
            {
              id: 11,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Feature Request"
            },
            {
              id: 12,
              title: "Design shopping cart dropdown",
              date: "Sep 9",
              type: "Design"
            },
            {
              id: 13,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Feature Request"
            }
          ]
        },
        {
          title: "Invoiced",
          tasks: [
            {
              id: 9,
              title: "Provide documentation on integrations",
              date: "Sep 12",
              type: "Invoice Sent"
            },
            {
              id: 10,
              title: "Design shopping cart dropdown",
              date: "Sep 9",
              type: "Invoice Sent"
            },
            {
              id: 11,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Paid"
            },
            {
              id: 12,
              title: "Design shopping cart dropdown",
              date: "Sep 9",
              type: "Invoice Sent"
            },
            {
              id: 13,
              title: "Add discount code to checkout page",
              date: "Sep 14",
              type: "Paid"
            }
          ]
        },
      ]
    };
  }
}
</script>

<style scoped>
.column-width {
  min-width: 320px;
  width: 320px;
}

.ghost-card {
  opacity: 0.5;
  background: #F7FAFC;
  border: 1px solid #4299e1;
}
</style>